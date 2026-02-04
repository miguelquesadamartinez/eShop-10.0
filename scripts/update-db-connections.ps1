# Script para actualizar todas las conexiones de base de datos
# De localhost a db (para Docker)

$rootPath = "C:\Users\migue\Documents\___CodeS\eShop-10.0"

Write-Host "`n=== Actualizando conexiones de base de datos ===" -ForegroundColor Cyan
Write-Host "Buscando archivos PHP con conexiones hardcodeadas...`n" -ForegroundColor Yellow

# Contador de archivos actualizados
$contador = 0

# Buscar archivos PHP (excluyendo directorios de documentación)
Get-ChildItem -Path $rootPath -Filter *.php -Recurse -Exclude "docker" | ForEach-Object {
    $file = $_.FullName
    $content = Get-Content $file -Raw -ErrorAction SilentlyContinue
    
    if ($content) {
        # Verificar si contiene conexiones antiguas
        if ($content -match 'mysql_connect\("localhost","nelosa_nelosa","mqm1804"\)') {
            Write-Host "Actualizando: " -NoNewline -ForegroundColor Yellow
            Write-Host $file.Replace($rootPath, ".")  -ForegroundColor White
            
            # Reemplazar conexiones
            $newContent = $content -replace 'mysql_connect\("localhost","nelosa_nelosa","mqm1804"\)', 'mysql_connect("db","eshop_user","eshop_pass")'
            $newContent = $newContent -replace 'mysql_select_db\("nelosa_nelosa"', 'mysql_select_db("eshop_db"'
            
            # Guardar archivo
            Set-Content $file -Value $newContent -NoNewline -Encoding UTF8
            Write-Host "  ✓ Actualizado" -ForegroundColor Green
            $contador++
        }
    }
}

Write-Host "`n=== Resumen ===" -ForegroundColor Cyan
Write-Host "Total de archivos actualizados: $contador" -ForegroundColor Green
Write-Host "`nNOTA: Ahora reinicia el contenedor web:" -ForegroundColor Yellow
Write-Host "  docker-compose restart web" -ForegroundColor White
Write-Host ""
