# AV WHIMS
Women's Health Interactive Management System.

A reference application for collaborative delivery and management of women's healthcare.

## Introduction
The application is part of a series of reference applications that fall under the code name "AV", inspired by the early explorer, Amerigo Vespucci. The AV series explores various opportunities to support industry needs, such as drug risk management and women's healthcare management.
 
AV WHIMS is a reference application that supports the HL7 SMART on FHIR application specification, and can be run as a standalone web applicaiton or as a SMART App within an electronic health record (EHR) container.

## Tech Stack
The AVWHIMS application is built using a traditional Linux + Apache + MariaDB + PHP web stack. It is a modern PHP application that uses strict typing and the Model-View-Controller design pattern. It demonstrates traditional client/server style web applications as well as a few examples of Single Page Application (SPA) modules using the React JavaScript library. AVWHIMS also implements OAuth 2.0 and OpenID Connect for single sign-on and integration with external APIs.

## Local Environment Setup
For local development, install and configure a LAMP package, such as XAMPP or WAMP. For local MacBook development, my preference is XAMPP.

The deployment folder for this application (which can also be your active development folder) should be:

```bash
/Applications/XAMPP/htdocs/avwhims
```

Start the Apache Web Server and MySQL (MariaDB) database from the XAMPP Manager app or from the command line. Once started, the application can be run from a web browser via the URL:

```bash
http://localhost/avwhims
```

## Additional Setup Information
For details on application and supporting database setup, refer to the documents in the "/docs" folder.
