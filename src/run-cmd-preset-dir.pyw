import os
import win32com.client
import time

shell = win32com.client.Dispatch('WScript.Shell')

appTitle = "CMD PALIVA " + __file__

if not shell.AppActivate(appTitle): 
  os.system("start \"" + appTitle + "\" C:\\WINDOWS\\system32\\cmd.exe")
else:
  shell.SendKeys('%{TAB}%{TAB}')

time.sleep(0.2)
shell.SendKeys('zf ')