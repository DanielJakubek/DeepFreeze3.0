# Sprint 1

# Main talking points to inspire the daily meetings were:

1 – What did I do yesterday that helped the development team meet the sprint goal 

2 – What are you working on today? 

3 – What problems are you facing or may face in trying to achieve #1 

================================================================

## Day [1] - Scrum Meeting summary
The Scrum Master for this meeting was **Sameer Al Harbi**

### Members Present:
Sameer, Adrian, Daniel, Alessandro, Gregor, Scott

### Summary of Conversation:

Sameer:
Will be working on helping setup the Azure hosting with Daniel which contributes to multiple user stories but mainly #20 and start working on stories #14 and #15 specifically. 

Daniel:
Will be working on the Azure hosting setup which contributes to multiple user stories but mainly #20. Will also work on setting up the index page with the buttons, this is story #2. Only issue with the former task is learning to use the Azure software. 

Scott:
Will be working on the Azure hosting setup which contributes to multiple user stories and working on story #20. 

Adrian:
Will be working on the Azure hosting setup which contributes to multiple user stories and on stories #14 and #15. 
 
Gregor:
Will be working on azure hosting setup and assisting Daniel with story 20. Will also start working on the map API implementation 
 
Alessandro:
Will be contributing to the map API implementation as pair programming, and will create an initial design draft for the SDG pages. 


## Day [2] - Scrum Meeting summary - Video: https://www.youtube.com/watch?v=vJG6zvM16SA
The Scrum Master for this meeting was **Sameer Al Harbi**

### Members Present:
Sameer, Adrian, Daniel, Alessandro, Gregor, Scott

### Summary of Conversation:

Sameer:
I helped with setting up Azure yesterday with Daniel and got the basics of a php login page working during pair programming with Adrian #15. Today, I’ll be continuing to make the login page and ensure it is secure to comply with story #10. I will also make a start on planning out the php website edit #14 

Daniel: 
I worked on setting up Microsoft azure, it works to an extent - some issues, such as git hub not redeploying correctly. Therefore, the goal was reached*. This was story #20 
Also worked on creating the index page with Scott, we managed to create it and add the 17 buttons to 17 different pages but, the index page itself does not look professional. The goal of creating it was reached but not to a professional level. This was story #2. 
Today I plan to work on making the index page and buttons more streamline but also adding a way to add new content if the person is an admin. The issue that will be faced with this task is the fact I don't quite know how to do that, so some learning will have to be done and will need to have the admin backend sorted to test it properly. 

Scott:
I worked on setting up the Azure and worked with Daniel to create the index page for the website with 17 buttons to take you to the goals. Story 2 was completed but can be made to look more professional. 
The plan today is to continue working on story 2 and make the index page look more professional and closer to the project owners requirements. We also working on story 14 

Adrian:
I helped with the setting up of Azure and worked with Sameer to design a login page using PHP (Story #15). Today I will be continuing to work on the login page with Sameer to hopefully get it finished. If this is completed, we will start work on story #14. 

Gregor:
I worked on the development of the template for the 17 pages to be created in the future. I helped with working on the design on the template and I also started work on the implementation of the map api for the webpages.  

Alessandro:
I worked on the development of one of the 17 pages in the website, in the process also creating a sort of template for the other pages to follow. 
I’ll work on the design of the page, and consider whether it should be made less minimalistic, and if so, how. Then, time permitting, I’ll work on the design of other pages, to ensure that we can create a consistent model. 
The page contains both paragraphs of text and a map, and I wasn’t able to figure out how to arrange for the text to not be overlapped by the map



## Day [3] - Scrum Meeting summary - Video: https://www.youtube.com/watch?v=vJG6zvM16SA
The Scrum Master for this meeting was **Sameer Al Harbi**

### Members Present:
Sameer, Adrian, Daniel, Alessandro, Gregor, Scott

### Summary of Conversation:

Sameer:
Debugging the PHP hosting on the azure services and continued working on the login. Spent some time cleaning up the code on repository too.  
Will need to work on creating the basics of the PHP API. so far, a basic connection with an SQL database. What remains is to setup the JSON encoding and getting api calls and returns to work. 

Adrian:
Spent yesterday helping Daniel and Sameer with both the PHP and the database and the issues that arose with those. 
Will work on fully setting up the database so that every page can access it and we have a reliable backend, which will help to speed up the development. 

Alessandro:
Yesterday, I improved the design of the existing SDG page to a state where we feel comfortable using them as a template. Today, I will contribute to creating the other pages 

Scott: 
I spent yesterday working on the website (story 20) and trying to add an edit button to the website to change information on the website (story 14) but ran into problems implementing it. The edit button needed the database running and we had trouble doing that yesterday. 
I will continue working on story 14 today and cleaning up the webpage 

Daniel:
I worked on setting up the github web app and azure. Making it work and making sure the database is connected properly and that tables are being printed. 
Unfortunately, due to this reason, I was unable to get on with adding an edit button item on the page and was unable to make the index page look more professional. Therefore, I made a design in my own time and will try implementing it soon. 
Will also need to update the sprint so that it is more realistic.  
So, today I hope to work on the edit buttons and making them actually work, and hope  that the database implementation is okay.  

Gregor:
I worked on finishing the template of the webpages and updating the map api. I also started filling in the information on the webpages but didn’t get very far.  
Today I am hoping to make more progress on the rest of the 17 pages so that they will be ready for friday.  



## Day [4] - Scrum Meeting summary
The Scrum Master for this meeting was **Sameer Al Harbi**

### Members Present:
Sameer, Adrian, Daniel, Alessandro, Gregor, Scott

### Summary of Conversation:

Sameer:
Created the login page and got a simple although insecure login to work with the database, today I'll need to fix that and redesign the site to have better UX / UI, maybe make a dashboard for the admin. It shouldn't be too bad but I'm expecting integration with Azure to have at least some issues.

Gregor:
Yesterday I worked on finishing up the last pages for the website but ran into an issue with the map api and had to recode the entire thing so that multiple markers displayed properly on the map within the webpage.  
Today I am going to finish my final pages and prepare for the meeting later on today.  

Scott:
Yesterday I worked on the edit button and helped Adrian and Daniel create generalized functions for the whole project, it took longer than expected but it was completed.  
The plan today is to finish off the remaining pages about the goals 

Alessandro:
Yesterday I wrote most of my share of the pages about the SDGs, and I tested their functionality, appearance, and responsiveness 
Today I’ll work on replacing the placeholder contents of the pages with something that can be displayed to the client, possibly making some layout tweaks along the way 

Adrian:
Yesterday I worked with Daniel and Scott to create the backend for the editing system, so you can get items from and edit items in the database such as images and text. We made these generalised functions so they can be easily utilized throughout the program. 
Today I am going to work with Daniel to sort out any issues that arise with putting the different parts of the project together. 

Daniel:  
Yesterday I managed to get the edit button code working – this would be the clicking the button and then being to alter items in the database table. This works for editing the text, the text is brought from the table and printed onto the game and that is also how images can be printed now too. The template for this is done but will be implemented next time. Also worked on re-creating the index page to look more professional and easier to traverse.  
Today I plan to put everything together, so have the index page up and running on the web app service, make sure the GitHub is readable and update the backlog. Adding the index page also include linking all the other pages and making sure the destination is correct. Issues with this might be the fact there are so many things to add. Will try to get it done before the sprint review. 
