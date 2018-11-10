@echo off
Update Software Denta
SETLOCAL EnableDelayedExpansion
for /F "tokens=1,2 delims=#" %%a in ('"prompt #$H#$E# & echo on & for %%b in (1) do rem"') do (
  set "DEL=%%a"
)

call :ColorText 0b "Make Sure you have internet connection"
echo.
call :ColorText 0C "Software will be update"
echo.



:: this is update comming from original repository
git pull https://github.com/mahdi2013safari/Denta-App.git

timestamp=$(date +"%D %T")
git add .
git commit -m "new update"

:: this is update comming from development mode repository
::git pull https://github.com/mahdi2013safari/Denta-C.git


call :ColorText 0a "Software updated"

goto :Beginoffile

:ColorText
echo off
<nul set /p ".=%DEL%" > "%~2"
findstr /v /a:%1 /R "^$" "%~2" nul
del "%~2" > nul 2>&1
goto :eof

:Beginoffile
::call :ColorText 0a "blue"
::call :ColorText 0C "green"
::call :ColorText 0b "red"
echo.
pause


