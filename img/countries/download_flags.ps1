# PowerShell script to download country flags

$countries = @{
    "Germany" = "de"
    "France" = "fr"
    "Italy" = "it"
    "Spain" = "es"
    "Netherlands" = "nl"
    "Sweden" = "se"
    "Malta" = "mt"
    "United_Kingdom" = "gb"
    "Switzerland" = "ch"
    "Norway" = "no"
    "Poland" = "pl"
    "Hungary" = "hu"
    "USA" = "us"
    "Canada" = "ca"
    "Brazil" = "br"
    "South_Africa" = "za"
    "Nigeria" = "ng"
    "Japan" = "jp"
    "Malaysia" = "my"
    "Singapore" = "sg"
    "UAE" = "ae"
    "Saudi_Arabia" = "sa"
    "Qatar" = "qa"
    "Kuwait" = "kw"
    "Oman" = "om"
    "Georgia" = "ge"
    "India" = "in"
    "China" = "cn"
    "South_Korea" = "kr"
    "Australia" = "au"
    "New_Zealand" = "nz"
}

foreach ($country in $countries.GetEnumerator()) {
    $url = "https://flagpedia.net/data/flags/w580/$($country.Value).png"
    $filename = "$($country.Key).png"
    
    Write-Host "Downloading $($country.Key)..." -ForegroundColor Green
    
    try {
        Invoke-WebRequest -Uri $url -OutFile $filename -ErrorAction Stop
        Write-Host "✅ Downloaded $($country.Key)" -ForegroundColor Green
    }
    catch {
        Write-Host "❌ Failed to download $($country.Key): $($_.Exception.Message)" -ForegroundColor Red
    }
}

Write-Host "🎉 Flag download process completed!" -ForegroundColor Cyan