import os
import re

# Configurations des commentaires pour chaque type de fichier
comments = {
    '.php': "<!-- Développé avec ❤️ par : www.noasecond.com. -->",
    '.js': "// Développé avec ❤️ par : www.noasecond.com.",
    '.html': "<!-- Développé avec ❤️ par : www.noasecond.com. -->",
    '.yml': "# Développé avec ❤️ par : www.noasecond.com.",
    '.css': "/* Développé avec ❤️ par : www.noasecond.com. */",
    '.sql': "-- Développé avec ❤️ par : www.noasecond.com.",
    '.py': "# Développé avec ❤️ par : www.noasecond.com."
}
extensions = tuple(comments.keys())
exclude_dirs = ['PHPMailer-6.9.1', '.git', '.github']
exclude_files = ['sitemap.xml', '.gitattributes', '.gitignore']

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
        # Remove old comment if present
        content = re.sub(r'(\n\n// Développé avec ❤️ par : www.noasecond.com.|<!-- Développé avec ❤️ par : www.noasecond.com. -->|\n\n# Développé avec ❤️ par : www.noasecond.com.|\n\n/\* Développé avec ❤️ par : www.noasecond.com. \*/|\n\n-- Développé avec ❤️ par : www.noasecond.com.)', '', content)

        # Remove trailing empty lines
        content = content.rstrip()
        
        if comment.strip() not in content:
            # Add a newline if the last line is not empty
            if not content.endswith(('\n', '\r')):
                content += "\n"
            file.seek(0)
            file.write(content + comment)
            file.truncate()

def main():
    for root, dirs, files in os.walk('.'):
        # Exclude specified directories
        dirs[:] = [d for d in dirs if d not in exclude_dirs]
        for file in files:
            file_path = os.path.join(root, file)
            if file.endswith(extensions) and not should_exclude(file_path):
                ext = os.path.splitext(file)[1]
                comment = comments[ext]
                add_comment_to_file(file_path, comment)

if __name__ == "__main__":
    main()
