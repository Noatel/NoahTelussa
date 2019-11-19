*** Settings ***
Library          REST                                                                 ${URL}
Documentation    Repo: https://github.com/asyrjasalo/RESTinstance/
...              Keyword documentation: https://asyrjasalo.github.io/RESTinstance/

*** Variables ***

*** Keywords ***
GET Functieniveaus
    GET                    /functieniveaus

Response Status Should Be
    [Arguments]            ${RESP_STATUS}
    Integer                response status                                     ${RESP_STATUS}

POST New Training
    [Arguments]            ${JSON}
    # This Keyword will create a ${CREATED_TRAINING_ID} variable that is usable in the rest of the tests
    &{resp}=               POST                                                /cursussen             ${JSON}
    Set Global Variable    ${CREATED_TRAINING_ID}                              ${resp.body.id}
    Log To Console         Created training with ID: ${CREATED_TRAINING_ID}

Log Response Body To Console
    Output                 response body

GET Training
    [Arguments]            ${ID}
    GET                    cursussen/${ID}

POST New Participant
    [Arguments]            ${ID}                                               ${PARTICIPANT_JSON}
    POST                   /cursussen/${ID}/cursuscursisten                    ${PARTICIPANT_JSON}

Check If Participant Has Joined
    [Arguments]            ${ID}
    GET                    cursussen/${ID}
    Integer                response status                                     200
    Array                  response body cursuscursisten
    String                 response body cursuscursisten 0 naam                ${STUDENT_NAME}

Verify Response JSON
    [Arguments]            ${EXPECTED}
    Expect Response        ${EXPECTED}

Verify Response Body
    [Arguments]            ${EXPECTED}
    String                 response body                                       ${EXPECTED}

DELETE Training
    [Arguments]            ${ID}
    DELETE                 /cursussen/${ID}
    Log To Console         Deleted training with ID: ${ID}
