import re,urllib,sys
import httplib, urllib, urllib2


string = "You have an error in your SQL syntax"
url=sys.argv[1]
response = urllib2.urlopen(url+"?id='")
html = response.read()
cadena = html.capitalize() 

match_pattern = re.search(r'You have an error in your SQL syntax', html)
if match_pattern!=None:
	a= match_pattern.group(0)

	if a==string:
		print "La pagina es vulnerable a una inyeccion SQL"
	else:
		print "NO ES VULNERABLE"
else:
	print "NO ES VULNERABLE"


print len(html)	
