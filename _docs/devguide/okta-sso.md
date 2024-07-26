# Okta OAuth 2.0 Integration

## Okta SSO Setup

### Create Okta Developer Account
I signed up up for the Okta Developer Network service.  

This generated an **okta company name** (dev-24886101) and an **okta organizational url** (dev-24886101.okta.com).

Below is a summary of what I did to register the AV WHIMS application and enable single sign-on. This can be done against multiple environments, such as localhost and a deployed location, such as a website hosted by a hosting service.

### Create New App
1. Login to the okta service using your company name, email address, and password  

2. Select _**Applications**_ from the lefthand side Applications menu

3. Create a new application integration via **_Create App Integration_** button  
   - Sign-In Method: OIDC - OpenID Connect  
   - Application Type: Web Application

4. New Web App Integration
   - App Integration Name: AV WHIMS
   - Logo: star-logo.png
   - Grant type: Authorization Code
   - Sign-in redirect URIs: http://localhost/avwhims/_include/sso.php
   - Sign-out redirect URIs:** http://localhost/avwhims
   - Assignments > Controlled Access: Skip group assignment for now

5. Client Credentials
   - Client ID: refer to 1P
   - Client Authentication: refer to 1P
   - Client Secret: refer to 1P

### Create Assignments (people or groups)
1. Select _**People**_ from the lefthand side Directory menu  
   - I can't remember if I was already in the list or had to create myself as a new user
   - The basic required attributes are name and email address

2. Return to the Applications area and select your new application  

3. Select the **Assignments** tab

4. Assign to People
   - Select a person to Assign
   - Save and Go Back
   - Select **Done**

### Update Your Web Application
Update your application to follow the the OAuth back and forth (multiple redirects) flow, including handling authorization codes, etc.  

This isn't trivial, but it does follow a standard pattern and once you've figured it out, subsequent implementations should be straightforward.

One of the first things to do is update `_/include/config.php` with the proper Okta values.
