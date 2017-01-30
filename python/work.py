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
route_graph = {}
days = ["mon","tue","wed","thur","fri","sat","sun"]
for opt in options:
    r = opt['value']
    print r
    if r == 'n/a' or r == '93|BreakTime  Tuesday & Friday':
        continue
    #for item in r.strip().split():
    #    for i in range(len(days)):
    name = [x for x in r.strip().split() if len(x) <= 2]
    table = requests.post(form, data={"routes":r}).text
    parsed = bs(table,"html.parser")
    for f in parsed.find_all('div'):
        if f.get('class') != None:
            if f.get('class') == ["stop_title"]:
                stop = f.text
            if f.get('class') == ["stop_times"]:
                #if len(f.text) != 1:
                for n in name:
                    if n[0].isalpha():
                        nm = str(n) # not needed
                        break
                if u'\xa0' in f.text: # trash unicode
                    continue
                print nm, stop, f.text #, str(f.text)[0].isdigit() # f.text = time
                
                if stop in schedule_by_stop:
                    schedule_by_stop[stop] += [[nm, str(f.text.strip())]] # str not needed
                else:
                    schedule_by_stop[stop] = [[nm, str(f.text.strip())]]
                #if name[0] not in route_graph:
                #    route_graph[name[0]] = {}
    print
#for stp in schedule_by_stop:
#    print stp, schedule_by_stop[stp]
