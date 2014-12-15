library(plyr)
library(ggplot2)
df = read.csv('trigrams_categories.csv')
#filter those without categories
df=df[df$category!="",] 

#sum categories
df = ddply(df, 'category', function(x) c(freq=sum(x$freq), separate_trigrams=nrow(x)))
df=df[df$category!="",] 

# Temporarily remove "IWOULDLOVE", "MAKESMEFEEL","TITLE"
df=df[df$category!="IWOULDLOVE" & df$category!="MAKESMEFEEL" & df$category!="TITLE",] 

#order by frequency
df[ order(df$freq), ]

#plot to verify we did it right
p <- ggplot(df, aes(y=freq,fill=category))
df$category <- reorder(df$category, -df$freq)
p + ylab("Frequency of Mention")+xlab("")+geom_bar(aes(x=category), data=df, stat="identity") +theme(legend.position="none",axis.text=element_text(angle=0)) + coord_flip()
