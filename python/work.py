import web_scraper as ws
from bs4 import BeautifulSoup as bs # or just "import bs4"
import requests
#import sys

#lt = ws.scrape(sys.argv[1])
#parsed = bs(lt.text, "html.parser") # can also take file obj
#dd_menu = parsed.select('iframe[name="schedule"]')[0]
#print dd_menu['src']




dd_menu = "http://cruiser.colgate.edu/scheduleDT.php"

menu = ws.scrape(dd_menu)
parsed = bs(menu.text, "html.parser")
form = "http://cruiser.colgate.edu/" + parsed.select('form')[0]['action']
options = parsed.select('option')
schedule_by_stop = {}
for opt in options:
    r = opt['value']
    print r
    if r == 'n/a' or r == '93|BreakTime  Tuesday & Friday':
        continue
    name = [x for x in r.split() if len(x) == 1]
    table = requests.post(form, data={"routes":r}).text
    parsed = bs(table,"html.parser")
    for f in parsed.find_all('div'):
        if f.get('class') != None:
            if f.get('class') == ["stop_title"]:
                stop = f.text
            if f.get('class') == ["stop_times"]:
                if len(f.text) != 1:
                    print name[0], stop, f.text
    print
