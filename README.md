# KSP_ModdedMultiPlayer for Linux Servers

- The following is how to install the required parts for DarkMultiPlayer and the Mods needed for my server. You only need DarkMultiPlayer to do this without all my mods.
- Port 6702 needs to be forwarded in your router
```
mkdir DMPServer && wget https://d-mp.org/downloads/release/latest/DMPServer.zip && unzip DMPServer.zip
wget http://godarklight.info.tm/dmp/downloads/plugins/DMPServerListReporter2/DMPServerListReporter.dll
sudo apt install mono-runtime monodevelopment -y
mono DMPServer.exe
```
You, of course, need to setup the configuration and more information on how to do that can be found here: 
