import requests, sys 
from bs4 import BeautifulSoup as bs # or just "import bs4"

if len(sys.argv) != 2:
    print "Argument Error"
    sys.exit()

# some of my own vars

def scrape(link,save=False):
#print sys.argv[1]
    try:
        res = requests.get(link)
        res.raise_for_status()
    except Exception as e:
        print "There was a problem scraping:"
        print e.__str__()
        sys.exit() # or return NULL

    if save:
        fn = link.split('/')[-1] 
        if '.' not in fn:
            fn += '.html'
        write2 = open(fn, 'wb')
        for chunk in res.iter_content(100000):
            write2.write(chunk)
        write2.close()
        print "Saved Scrapings on " + fn + " ...just for you ;-)"
    return res.text # could just give out the obj???

lt = scrape(sys.argv[1])
parsed = bs(lt, "html.parser") # can also take file obj
dd_menu = parsed.select('iframe[name="schedule"]')[0]
print dd_menu

menu = scrape(dd_menu['src'])
parsed = bs(menu, "html.parser")
form = parsed.select('form')[0]['action']
#print form
#print
options = parsed.select('option')
for opt in options:
    r = opt['value']
    print r

sched = {}
print
p = options[1]['value']
print p
ps = {p[0]:p[1]}
print requests.post("http://cruiser.colgate.edu/schedule-resultsDT.php", data={"routes":p}).text
