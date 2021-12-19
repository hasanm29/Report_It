import pymongo
from pymongo import MongoClient
from pymongo import collection
from pymongo import collation
import pprint

# cluster = MongoClient("mongodb+srv://student:student@sandbox.ni8zp.mongodb.net/cw?retryWrites=true&w=majority")

# client = pymongo.MongoClient("mongodb+srv://student:student@sandbox.ni8zp.mongodb.net/cw?retryWrites=true&w=majority")

client = pymongo.MongoClient("mongodb+srv://student:student@sandbox.ni8zp.mongodb.net/cw?ssl=true&ssl_cert_reqs=CERT_NONE")
desc1 = "Sexual violence or sexual abuse are ways of describing any unwanted sexual act or activity.It does not matter who commits it, where or when it happened, it is never okay, and no one ever deserves for it to happen.If you have experienced sexual violence or abuse there is confidential and independent support available to help you."
desc2 = "The first step to reach out for support will be different for everyone.You can speak to someone over the phone or chat to someone online by contacting the services listed below – you might want to contact one which feels right for you and your needs."
post1 = {"id":1,"Heading": "Sexual Violence", "Desc": desc1}
post2 = {"id":2,"Heading":"Second Element", "Desc":desc2}
db = client.cw
collection = db.homepage

test = collection.find_one({"id":1})
print(test["Heading"])


# Insert Operation
"""
post_id = collection.insert_one(post).inserted_id # Insert Document

# Insert Multiple document
collection.insert_many([post1,post2])
print("Insertion is complete")
"""
# Query Operation
"""
# pprint.pprint(collection.find_one()) # Finding a document
# pprint.pprint(collection.find_one({"_id":1})) # Find document with id=1

"""
# Delete Operation
"""
query = {"_id":1}
result = collection.delete_one(query)
print("total deleted amount is: ",result.deleted_count())
"""
# Update Operation
"""
myquery = post1
newvalues = { "$set": { "Heading": "Sexual Harassment" } }

collection.update_one(myquery, newvalues)
print("Heading is updated")

#print "customers" after the update:
for x in collection.find():
  print(x)
"""


