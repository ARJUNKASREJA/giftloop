echo -e "\033[1;36m       ┌────────────────────────────────────────────┐"
echo -e "\033[1;30m       │░░░░░░░░░█▀▀░█▀▄░█▀▀░█▀█░▀█▀░█▀▀░█▀▄░░░░░░░░│"
echo -e "\033[1;31m       │░░░░░░░░░█░░░█▀▄░█▀▀░█▀█░░█░░█▀▀░█░█░░░░░░░░│"
echo -e "\033[1;32m       │░░░░░░░░░▀▀▀░▀░▀░▀▀▀░▀░▀░░▀░░▀▀▀░▀▀░░░░░░░░░│"
echo -e "\033[1;33m       │░░░░░░░░░░░░░░░░░░░█▀▄░█░█░░░░░░░░░░░░░░░░░░│"
echo -e "\033[1;34m       │░░░░░░░░░░░░░░░░░░░█▀▄░░█░░░░░░░░░░░░░░░░░░░│"
echo -e "\033[1;35m       │░░░░░░░░░░░░░░░░░░░▀▀░░░▀░░░░░░░░░░░░░░░░░░░│"
echo -e "\033[1;36m       │░█░█░█░█░█▀█░▀█▀░█▀▀░█▀▄░▀█░░▀█░░▄▀▄░▀▀▄░▀█░│"
echo -e "\033[1;30m       │░█▀█░█░█░█░█░░█░░█▀▀░█▀▄░░█░░░█░░▄▀▄░▄▀░░░█░│"
echo -e "\033[1;35m       │░▀░▀░▀▀▀░▀░▀░░▀░░▀▀▀░▀░▀░▀▀▀░▀▀▀░░▀░░▀▀▀░▀▀▀│"
echo -e "\033[1;36m       └────────────────────────────────────────────┘"
echo -e "\n";
echo -e "\033[1;32m Installing Requirements...\n"
pkg update -y
pkg upgrade -y
pkg install php-y
pkg install bs4
pkg install figlet
pkg install ruby -y
pkg install toilet -y
pkg install php -y
pkg install git
pkg install git clone
pkg install curl
pkg update-y

echo -e "\033[1;35m Requirements Installed...\n"
