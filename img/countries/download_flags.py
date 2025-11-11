import requests

countries = {
    "Germany": "de",
    "France": "fr",
    "Italy": "it",
    "Spain": "es",
    "Netherlands": "nl",
    "Sweden": "se",
    "Malta": "mt",
    "United_Kingdom": "gb",
    "Switzerland": "ch",
    "Norway": "no",
    "Poland": "pl",
    "Hungary": "hu",
    "USA": "us",
    "Canada": "ca",
    "Brazil": "br",
    "South_Africa": "za",
    "Nigeria": "ng",
    "Japan": "jp",
    "Malaysia": "my",
    "Singapore": "sg",
    "UAE": "ae",
    "Saudi_Arabia": "sa",
    "Qatar": "qa",
    "Kuwait": "kw",
    "Oman": "om",
    "Georgia": "ge",
    "India": "in",
    "China": "cn",
    "South_Korea": "kr",
    "Australia": "au",
    "New_Zealand": "nz",
}

for country, code in countries.items():
    url = f"https://flagcdn.com/w512/{code}.png"
    print(f"Downloading {country}...")
    r = requests.get(url)
    if r.status_code == 200:
        with open(f"{country}.png", "wb") as f:
            f.write(r.content)
    else:
        print(f"Failed to download {country}")
print("✅ All flags downloaded successfully!")
