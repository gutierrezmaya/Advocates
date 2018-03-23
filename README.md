# Advocates
**CS 153 Final Project Proposal**

Caroline Chou, Maya Gutierrez, Lizzy Riffle, Kira Weiss
 
**Website for Claremont McKenna Advocates for Survivor of Sexual Assault and Domestic Violence**
 
Claremont McKenna Advocates provide support as a confidential resource to survivors of sexual assault and domestic violence, whether the violation happened on or off of campus. Advocates help direct survivors and allies to the appropriate resource and advocate on their behalf. 
 
Currently, CMC Advocates does not have a website. Without a website, it is harder for survivors and friends of survivors to find resources for survivors or to learn about the different events that Advocates put on to educate the community. Additionally, with the website Advocates can offer new services to survivors and allies on campus, such as booking an advocate for a one-on-one session or booking an Advocate for your event. 
 
In the website we would like to include: 
<table>
  <tr>
    <th><b>External Site: For the Public</b></th>
    <th>Internal Site: For Advocates only<b>Sports</b></th>
  </tr>
  <tr>
    <td>Home page<br>
                        Login <br>
                        Page of outside resources<br>
                        Page of safe sexual practices<br>
                        Advocate bios + hours available<br>
                        Advocate event information<br>
                        Book an advocate for one-on-one session - will need database<br>
                        Book an advocate for an event<br>
                        Advocate application<br>
                        Anonymous reporting (maybe)<br>
                        Feature to send notifications for upcoming events <br>
                        Chat system between users and advocates<br>
                        Locations of blue lights around campus<br>
                        Share events with friends via social media<br>
                        Page of photos from past events
</td>
    <td>Home page<br>
                        Page of outside resources<br>
                        Advocate login page - will need a database<br>
                        Advocate event information<br>
                        Advocate Calendar<br>
                        Page to enter availability for events and meetings<br>
                        Feature to send notifications for upcoming events and meetings
  </td>
  </tr>
</table>

<b><u>Tools/APIS needed for various website features:</u></b>
 
<b>Home page, Page of outside resources, Page about safe sexual practices, Advocate Bios</b>

Include HTML, CSS, and Javascript to add substance and formatting to these pages. The homepage will include a description of the advocates group and will link to all other pages on the website. The page of outside resources will include information about resources available to students on campus. The page about safe sexual practices will include health education facts and advice. The advocate bio page will include all advocates that have been vetted through the application process. For each advocate, a picture, short bio, contact information, and their hours of availability to be contacted will be included.

<b>Login Form:</b>

We will use PHP to code a login form. This will allow users to login and use website functions such as our chat box and appointment booking form. 

<b>Book an advocate for one-on-one session / Book an advocate for an event:</b>

In order to create an appointment system where students can sign up to meet with an advocate, we will need to use HTML, Javascript, MYSQL and PHP. Using these tools, we will create a web application for managing appointments with advocates. The web application will allow users to request and appointment and see available time slots and allows advocates to edit and delete appointments as well as schedule office hours and create appointment slots. 

As well as the use of HTML, javascript, MYSQL and PHP, we are considering using various features of the Google calendar API which may allow us to organize an appointment system. 

<b>Feature to send notifications for upcoming events:</b>

The Google Calendar API supports reminders and notifications. A reminder will consist of the amount of time before an event as well as specify the delivery method of the reminder. Advocates will be allowed to send default reminders. Notifications will include event change, event cancellation, and event creation. 

<b>Locations of blue lights around campus:</b>

We also want to incorporate the Google Maps API, displaying the various locations of the emergency blue lights around campus so that they could be easily accessed by users. 

<b>Chat system between users and advocates:</b>

We are also considering creating an online chat system, where advocates are paired with users who wish to chat about sensitive issues. We will use HTML to create a simple chat box, we will also include CSS for styling, Ajax, JQuery, and PHP for the login form and to post user data to the chat screen. 
