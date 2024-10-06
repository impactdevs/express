### find_text_in_files
# import os
#
# def find_text_in_files(directory, search_text):
#   """Finds specified text in all files in the directory and subdirectories.
#
#   Args:
#     directory: The directory to search.
#     search_text: The text to search for.
#
#   Returns:
#     A list of files that contain the search text.
#   """
#
#   found_files = []
#
#   for root, dirs, files in os.walk(directory):
#     for file in files:
#       file_path = os.path.join(root, file)
#       with open(file_path, 'r') as f:
#         if search_text in f.read():
#           found_files.append(file_path)
#
#   return found_files
#
# def save_files_to_text(files, output_file):
#   """Saves a list of files to a text file.
#
#   Args:
#     files: A list of files to save.
#     output_file: The name of the output file.
#   """
#
#   with open(output_file, 'w') as f:
#     for file in files:
#       f.write(file + '\n')
#
# if __name__ == '__main__':
#   directory = "resources/views"
#   search_text = "url('freelancer-ongoing-projects"
#   output_file = "found.txt"
#
#   found_files = find_text_in_files(directory, search_text)
#   save_files_to_text(found_files, output_file)
#
#   print(f'{len(found_files)} files found containing the text "{search_text}".')

import os

if __name__ == '__main__':
    with open('found.txt', 'r') as f:
        lines = f.readlines()
        for line in lines:
            line = line.rstrip("\n")
            if ":" in line:
                line = line.replace(': ', '", "description" => "')
                print('\t[ "name" => "'+line+'" ],')
            else:
                print('],\n"'+line+'" => [')
    print(']')
