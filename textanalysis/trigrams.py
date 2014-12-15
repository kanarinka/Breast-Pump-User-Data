import nltk
import codecs
import string
from nltk.corpus import PlaintextCorpusReader
from nltk.corpus import stopwords
corpus_root = '../userstories'
newcorpus = PlaintextCorpusReader(corpus_root, '.*')

tokens = [w for w in newcorpus.words() if not (w in stopwords.words('english') or w in string.punctuation or w == '--')]

# BIGRAMS
#Create your bigrams
#bigrams = nltk.bigrams(tokens)

#compute frequency distribution for all the bigrams in the text
#bigramDist = nltk.FreqDist(bigrams)

#for k,v in fdist.items():
#	print unicode(k[0]) + ", "+unicode(k[1]) +", "+unicode(v)

# FOR TRIGRAMS

trigrams = nltk.trigrams(tokens)
trigramDist = nltk.FreqDist(trigrams)

#filter out freq <=2 
filtered_freq = {k:v for (k,v) in trigramDist.items() if v > 2}
for k,v in filtered_freq.items():
	print unicode(k[0]) + ", "+unicode(k[1]) + ", "+ unicode(k[2]) +", "+unicode(v)
	