# PHP Technical Test

## Documentation

Things I did : 
- GoogleController & GoogleAuhtenticator for Google Sign-in 
- Upload knpu_oauth2_client for get Google Sign-in
- Make HomeController to call NASA API 
- A service to call API
- Create a Manager to persist and flush the picture of the day with Doctrine
- Make a migration 


Things I failed : 
- CLI failed to create. I only do a Command : DisplayPictureCommand.
- I did not succeed to upload pictures to DB (PostgreSQL). The goeal to limit the number of calls to API failed. 

Google : 
{"web":{"client_id":"944957133193-80chj9sab5en543mtmea016cfmp3s3dk.apps.googleusercontent.com","project_id":"adimeo","auth_uri":"https://accounts.google.com/o/oauth2/auth","token_uri":"https://oauth2.googleapis.com/token","auth_provider_x509_cert_url":"https://www.googleapis.com/oauth2/v1/certs","redirect_uris":["http://127.0.0.1:46759/connect/google/check"]}}
