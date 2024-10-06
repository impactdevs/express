import json

# Read the JSON file
with open('countries_all.json', 'r', encoding='utf-8') as file:
    data = json.load(file)

# Transform the array into an object
result = {item['cca2']: item for item in data}

sorted_keys = sorted(result.keys())

new_result = { key: result[key] for key in sorted_keys}

# Optionally, write the result to a new JSON file
with open('result.json', 'w', encoding='utf-8') as file:
    json.dump(new_result, file, ensure_ascii=False, indent=2)
