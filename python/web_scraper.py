import requests 

def scrape(link,save=False):
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
        print "Saved Scrapings on " + fn
    return res 
