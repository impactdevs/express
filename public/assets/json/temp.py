# import json
#
# # Read the JSON file
# with open('countries_all.json', 'r', encoding='utf-8') as file:
#     data = json.load(file)
#
# # Transform the array into an object
# result = {item['cca2']: item for item in data}
#
# sorted_keys = sorted(result.keys())
#
# new_result = { key: result[key] for key in sorted_keys}
#
# # Optionally, write the result to a new JSON file
# with open('result.json', 'w', encoding='utf-8') as file:
#     json.dump(new_result, file, ensure_ascii=False, indent=2)

import json

# Read the JSON file
with open('countries_all.json', 'r') as file:
    data = json.load(file)

# Transform the array into an object

result = {}
langs = [item['currencies'] for item in data]

for lang in langs:
    result.update(lang)

sorted_keys = sorted(result.keys())

new_result = []

for key in sorted_keys:
    result[key].update({'abbr':key})
    new_result.append(result[key])


print(new_result)

jstr = json.dumps(new_result)
jstr = jstr.replace('{', '[')
jstr = jstr.replace('}', ']')
jstr = jstr.replace('":', '" =>')

print(jstr)


# Optionally, write the result to a new JSON file
with open('result.json', 'w', encoding='utf-8') as file:
    json.dump(new_result, file, ensure_ascii=False, indent=2)

