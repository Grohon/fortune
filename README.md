# Fortune Cookie   
## Display fortune cookie message using curl.
### Demo: curl -4 [hash404.com/fortune/] (http://hash404.com/fortune/)
### Creating alias in bash:
**Add this line to your bash alias file:**
```shell
$ alias fortune='curl -s http://example.com/fortune/'
```

### Integrating cowsay with fortune.
####To install cowsay use:
*On Ubuntu/Debian:*
```shell
$ sudo apt-get install cowsay
```
*On CentOS/Fedora:*
```shell
$ sudo yum install cowsay
```
*For Windows, try this:*
```shell
$ npm install -g cowsay
```
#### Finally, add this line to your bash alias file:
```shell
$ alias fortune='curl -s http://example.com/fortune/ | cowsay'
```

### Message source: [Fortune Cookie Message] (http://fortunecookiemessage.com)
