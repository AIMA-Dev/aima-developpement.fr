import os

# Configurations des commentaires pour chaque type de fichier
comments = {
    '.php': {
        'default': "\n\n// Développé avec ❤️ par : www.noasecond.com.",
        'html': "\n\n<!-- Développé avec ❤️ par : www.noasecond.com. -->"
    },
    '.js': "\n\n// Développé avec ❤️ par : www.noasecond.com.",
    '.html': "\n\n<!-- Développé avec ❤️ par : www.noasecond.com. -->",
    '.yml': "\n\n# Développé avec ❤️ par : www.noasecond.com.",
    '.css': "\n\n/* Développé avec ❤️ par : www.noasecond.com. */",
    '.sql': "\n\n-- Développé avec ❤️ par : www.noasecond.com.",
    '.py': "\n\n# Développé avec ❤️ par : www.noasecond.com."
}
extensions = tuple(comments.keys())
exclude_dirs = ['PHPMailer-6.9.1', '.git', '.github']
exclude_files = ['sitemap.xml','.gitattributes', '.gitignore']

def should_exclude(file_path):
    for excl_dir in exclude_dirs:
        if excl_dir in file_path:
            return True
    for excl_file in exclude_files:
        if file_path.endswith(excl_file):
            return True
    return False

def add_comment_to_file(file_path, comment):
    with open(file_path, 'r+') as file:
        content = file.read()
        if comment.strip() not in content:
            file.write(comment)

def detect_comment_type_for_php(content):
    php_tags = content.count('<?php')
    html_tags = content.count('<') + content.count('>')
    if php_tags > html_tags:
        return comments['.php']['default']
    else:
        return comments['.php']['html']

def main():
    for root, dirs, files in os.walk('.'):
        # Exclude specified directories
        dirs[:] = [d for d in dirs if d not in exclude_dirs]
        for file in files:
            file_path = os.path.join(root, file)
            if file.endswith(extensions) and not should_exclude(file_path):
                ext = os.path.splitext(file)[1]
                if ext == '.php':
                    # Read the file to determine the type of content
                    with open(file_path, 'r') as f:
                        content = f.read()
                        comment = detect_comment_type_for_php(content)
                else:
                    comment = comments[ext]
                add_comment_to_file(file_path, comment)

if __name__ == "__main__":
    main()