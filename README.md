# Scan-o-car

**Abstract**

Using various technologies, in this project, we designed and created a system which helps us to detect and recognize a vehicle license plate. Recognition of a vehicle license  plate is usually important for many security and control systems. This process involves five major steps, i.e., Localization, Gray Scale Conversion, Character Segmentation, Character Recognition and finally Validation. 

Using the web we get the input and process the license plate’s through Python backend, as mentioned above it’s done in 5 steps Localizing the Number Plate by cropping the area where the license plate is present,further that image is converted into gray scale for converting the image to 0’s and 1’s i.e. binary. After which the characters are segmented so that it can be individually identified in the next process where we retrieve the value to the license plate as a string. This string is then provided back to the web for verifying the string. And according to the results of the validation the instructions are provided to the security official to take the next step.

**Introduction**

In this project, we make sure to increase the level of security and also reduce the man power which is used to maintain records for all the incoming cars in a particular institute/organization. In this system, we install a webcam for every organization which will capture pictures of every incoming car which was previously done by assigning men for the work. 
After capturing the picture of the cars from a particular angle, we will get it for processing the text of the number plate of the car. We then compare the car number with the ones present in our database which has all the cars belonging to the reserved parking for the employees. The ones that do not match, are needed to be manually entered into the system for safety purposes.

**Motivation**

The motivation for this project came in our minds when we realized that our society premises does not provide any kind of security for intruders coming to the society premises. The security officials sometimes due to loads of work does not enter the register regarding which vehicle entered the premises. Sometimes intruders may cause a problem to the society and the officials do not have any clue about the intruder vehicle as such.

**Problem Statement**

To overcome disadvantages in the conventional way of checking cars every time it enters a private premise, i.e, the amount of time consumed during each and every step and improve low level of security.

**Objectives**

•	To retrieve number from vehicle’s license plate.

•	To maintain logs of incoming cars.

•	To verify vehicle owner details.

•	Add a level of security in the existing checking system.

**Working**

As soon as a car comes close to the entry point of the premises, the security official captures a image of the car through a webcam which is installed at a specific angle next to the entry point. The image is clicked through a web video streaming means which is then supplied to the python backend for retrieving the license plate number of the vehicle. At the python backend the image is first cropped using pillow library of python, the cropped part is the part where the license plate is located. The cropped image is then converted into gray scale so that it becomes easier for the license plate algorithm to retrieve the data. The gray scaled image is further processed by segmenting the image to divide the characters of the number for easy recognition. From the segmented image we can retrieve the number and it is stored in the string format. After which that retrieved string is supplied back to the web framework through flask packages. 

Once the web portal receives the text back it verifies with the local database where the details of all the vehicles belonging to the institute are stored. If the system finds the number in the local database than it will instruct the security official back to allow the entry for the vehicle, and if the entry is not found in the database then it will instruct the official to not allow the entry and check with the vehicle the purpose for it’s visit to the premises. And whether it allows or it denies, all the details of the vehicle and it’s time and date of arrival is stored in the database as logs. These logs can be viewed by the admin of the premises as and when he/she requires.

**Hardware Requirements**

1. Webcam : Webcam used by us in the project is Quantam QHM495LM

**Software Requirements**

1. Python
2. MySQL
3. PHP
4. XAMPP
5. HTML5 and CSS3
6. Pycharm CE

**Conclusion**

Vehicle number plate recognition is something that can be slowly introduced in various residential and commercial premises for security enhancement. This project implies the implementation of this idea using various technologies. To make this project a reality we used Python to achieve the main aim of car number extraction along with various web technologies to provide a simple yet interactive GUI.
This project has imparted us the knowledge of Python, database management and web technology. Along with technical knowledge we also learnt about non-technical aspects like teamwork, task management, deadlines and preparing documentation of the system. This project was a result of a series of failures, which were later rectified and debugged to produce the final system.

**Future Work**

1. Project scope explains the boundaries of the project, establishes responsibilities for each team member and sets up procedures for how completed work will be verified and approved. The system created is heavily dependent on the image clicked in real time by the security official present on duty. If the image is not clicked at the right time, the process becomes manual. So there is scope to make the system fully automated.
2. The scope of the system does not extend to detection of the numbers for bikes, other two-wheelers and three-wheelers. Thus, the system can be enhanced to detect numbers of all types of vehicles. The system needs strong connectivity and a constant power supply to the client system. 
3. The system can be connected via sensors to the assist handles at entry points of vehicles into premises. The assist handle will allow or deny entry according to the command received by the sensor from the software. The functions of the software can also be extended to checking if the number of the car is displayed according to the government norms or it is displayed in fancy fonts. Further, we can add the feature of facial recognition of the driver of the vehicle for more security.
4. An Android application can also be developed for the same system.


