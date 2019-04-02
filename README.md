# KSP_ModdedMultiPlayer for Linux Servers

If you are here for just the mods, this is the file you need <a href="4-02-2019.ckan">4-02-2019.ckan</a>
You are going to need more than 8Gb of RAM to play on our server because KSP has to load all of the parts into memory.

# Server Setup
- The following is how to install the required parts for DarkMultiPlayer and the Mods needed for my server. You only need DarkMultiPlayer to do this without all my mods.
- Port 6702 needs to be forwarded in your router
```
echo"Getting Server Package";
mkdir DMPServer && wget https://d-mp.org/downloads/release/latest/DMPServer.zip && unzip DMPServer.zip
echo "Getting server reporting and public listing plugin";
wget http://godarklight.info.tm/dmp/downloads/plugins/DMPServerListReporter2/DMPServerListReporter.dll
echo "Installing dependencies..."
sudo apt install mono-runtime monodevelopment -y
echo "You need to Ctrl+c after this initial server start, it is unpacking things..."
mono DMPServer.exe
echo "Please Ctrl+c now!"
```
You, of course, need to setup the configuration and more information on how to do that can be found here: <a href="http://d-mp.org/w/Main_Page">DMP Wiki</a>
