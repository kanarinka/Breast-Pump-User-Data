import csv
import os
import time

result_file = open('all_user_stories.csv','wb')
fieldnames = ["user", "date", "idea"]
csvwriter = csv.DictWriter(result_file, delimiter=',', fieldnames=fieldnames)
csvwriter.writeheader()

for theFile in os.listdir(os.getcwd()):
	new_row = {}
	if theFile.endswith(".txt"):
		new_row["user"] = theFile.split('_', 2)[1]
		new_row["date"] = time.strftime('%Y-%m-%d %H:%M:%S', time.localtime(float(new_row["user"])))
		with open (theFile, "r") as myfile:
			new_row["idea"]=myfile.readlines()
		csvwriter.writerow(new_row)
	else:
		continue