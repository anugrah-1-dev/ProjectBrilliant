import os, re, glob

base = r'd:\Projek_Web\laragon\www\ProjectBrilliant-penkaming\resources\views'
vendor_prefix = os.path.join(base, 'vendor')

issues = []

for root, dirs, files in os.walk(base):
    # Skip vendor/adminlte and vendor/pagination (not our code)
    if root.startswith(vendor_prefix):
        continue
    for fname in files:
        if not fname.endswith('.blade.php'):
            continue
        fpath = os.path.join(root, fname)
        content = open(fpath, 'r', encoding='utf-8', errors='replace').read()
        rel = os.path.relpath(fpath, base)

        # Find labels without for attribute
        for m in re.finditer(r'<label(?![^>]*\bfor=)[^>]*>', content, re.IGNORECASE):
            tag = m.group(0)
            # Ignore labels that are purely decorative (no form context needed)
            line = content[:m.start()].count('\n') + 1
            issues.append(f"NO-FOR  {rel}:{line}  {tag.strip()[:80]}")

        # Find labels with for pointing to an id that doesn't exist in the file
        for m in re.finditer(r'<label[^>]+\bfor=["\']([^"\']+)["\']', content, re.IGNORECASE):
            for_val = m.group(1)
            line = content[:m.start()].count('\n') + 1
            # Check if id exists
            id_pattern = r'id=["\']' + re.escape(for_val) + r'["\']'
            if not re.search(id_pattern, content, re.IGNORECASE):
                issues.append(f"BAD-FOR {rel}:{line}  for=\"{for_val}\" -- no id=\"{for_val}\" found")

for i in issues:
    print(i)
