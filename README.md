# Advocates
**CS 153 Final Project Proposal**

Caroline Chou, Maya Gutierrez, Lizzy Riffle, Kira Weiss
 
**Website for Claremont McKenna Advocates for Survivor of Sexual Assault and Domestic Violence**
 
Instructions on how to deploy website: 
1. Open MAMP application, start servers
2. Add final project folder to htdocs in the MAMP folder
3. Start the database in the terminal using our CalDatabase.sql file 
4. Navigate through the website, paying special attention to login/logoff features and booking and appointment to the calendar. 

Claremont McKenna Advocates provide support as a confidential resource to survivors of sexual assault and domestic violence, whether the violation happened on or off of campus. Advocates help direct survivors and allies to the appropriate resource and advocate on their behalf. 
 
Currently, CMC Advocates does not have a website. Without a website, it is harder for survivors and friends of survivors to find resources for survivors or to learn about the different events that Advocates put on to educate the community. Additionally, with the website Advocates can offer new services to survivors and allies on campus, such as booking an advocate for a one-on-one session or booking an Advocate for your event. 
 
**Original README file content:**
In the website we would like to include: 
<table>
  <tr>
    <th><b>External Site: For the Public</b></th>
    <th>Internal Site: For Advocates Only<b></b></th>
  </tr>
  <tr>
    <td>Home page<br>
                        Page of outside resources<br>
                        Advocate bios<br>
                        Book an advocate for one-on-one session - will need database<br>
                        Book an advocate for an event<br>
                        Page of photos from past events
</td>
    <td>Home page<br>
                        Page of outside resources<br>
                        Advocate login page - will need a database<br>
                        Advocate event information<br>
                        Advocate Calendar<br>
                        Page to enter availability for events and meetings<br>
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
