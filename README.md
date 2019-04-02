# KSP_ModdedMultiPlayer for Linux Servers

If you are here for just the mods, this is the file you need <a href="4-02-2019.ckan">4-02-2019.ckan</a>

# Server Setup
- The following is how to install the required parts for DarkMultiPlayer and the Mods needed for my server. You only need DarkMultiPlayer to do this without all my mods.
- Port 6702 needs to be forwarded in your router
```
mkdir DMPServer && wget https://d-mp.org/downloads/release/latest/DMPServer.zip && unzip DMPServer.zip
wget http://godarklight.info.tm/dmp/downloads/plugins/DMPServerListReporter2/DMPServerListReporter.dll
sudo apt install mono-runtime monodevelopment -y
mono DMPServer.exe
```
You, of course, need to setup the configuration and more information on how to do that can be found here: <a href="http://d-mp.org/w/Main_Page">DMP Wiki</a>
