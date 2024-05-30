import os

# Configurations
comment = "\n\n# Développé avec ❤️ par : www.noasecond.com."
extensions = ('.php', '.js', '.html', '.yml', '.css', '.sql', '.py')
exclude_dirs = ['PHPMailer-6.9.1', '.git', '.gitattributes', '.gitignore']
exclude_files = ['exclude_this_file.php']

def should_exclude(file_path):
    for excl_dir in exclude_dirs:
        if excl_dir in file_path:
            return True
    for excl_file in exclude_files:
        if file_path.endswith(excl_file):
            return True
    return False

def add_comment_to_file(file_path):
    with open(file_path, 'r+') as file:
        content = file.read()
        if comment.strip() not in content:
            file.write(comment)

def main():
    for root, dirs, files in os.walk('.'):
        # Exclude specified directories
        dirs[:] = [d for d in dirs if d not in exclude_dirs]
        for file in files:
            if file.endswith(extensions) and not should_exclude(os.path.join(root, file)):
                add_comment_to_file(os.path.join(root, file))

if __name__ == "__main__":
    main()