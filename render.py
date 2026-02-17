import re
import os

def render_php(file_path):
    with open(file_path, 'r', encoding='utf-8') as f:
        content = f.read()

    # Simple regex to find <?php include "filename.php"; ?> or include('filename.php');
    pattern = re.compile(r'<\?php\s+include\s+["\'](.*?)["\'];\s+\?>')
    
    def replace_include(match):
        include_file = match.group(1)
        if os.path.exists(include_file):
            with open(include_file, 'r', encoding='utf-8') as inc_f:
                return inc_f.read()
        return f"<!-- Include failed: {include_file} -->"

    # Recursive-ish replacement (just in case)
    content = pattern.sub(replace_include, content)
    
    # Remove any other PHP tags (simple ones)
    content = re.sub(r'<\?php.*?\?>', '', content, flags=re.DOTALL)
    
    return content

if __name__ == "__main__":
    html_content = render_php('index.php')
    with open('preview.html', 'w', encoding='utf-8') as f:
        f.write(html_content)
    print("Rendered index.php to preview.html")
