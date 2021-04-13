**A dead simple furigana server**

The query is simple like example.com/?q={anything}

Usage:
1. Install Mecab
2. Install this furigana generator https://github.com/michaelvobrien/furigana
3. Set up the server

I'm giving the lighttpad configuraton that works on port 3647

To use the config file, install lighttpd, then change the location of the folder in lighttpd.conf. Then type "lighttpd -f lighttpd.conf"

**This is very useful for calibre, set it up as a local server and put the link of server in the calibre**