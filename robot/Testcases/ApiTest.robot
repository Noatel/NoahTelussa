*** Settings ***
Resource                      ../Keywords/ApiTestKeywords.robot

*** Variables ***
${GROUP_NUMMER}               5
${URL}                        http://cursusservice-kzastudent-0${GROUP_NUMMER}.online.hotcontainers.nl/api
${NEW_CURSUS_DATUM}           01-01-2019 18:00:00
${NEW_CURSUS_DOCENT_NAAM}     Docent Naam
${NEW_CURSUS_DOCENT_EMAIL}    docent@email.nl
${NEW_CURSUS_NAAM}            Noah cursus
${NEW_CURSUS_ATT}             Technical attitude
${NEW_CURSUS_FN}              3
${NEW_CURSUS_SLAGINGCR}       Zelfstudie
${NEW_CURSUS_STATUS}          Inschrijving geopend
${NEW_CURSUS_MAXDEELNMRS}     10
${NEW_CURSUS_DESC}            Beschrijving van de cursus
${NEW_TRAINING_JSON}          {"cursusdata":[{"id":null,"datum":"${NEW_CURSUS_DATUM}"}],
...                           "cursusdocenten":[{"id":null,"naam":"${NEW_CURSUS_DOCENT_NAAM}","email":"${NEW_CURSUS_DOCENT_EMAIL}"}],
...                           "cursuscursisten":[], "naam":"${NEW_CURSUS_NAAM}","attitude":"${NEW_CURSUS_ATT}",
...                           "functieniveau":"${NEW_CURSUS_FN}","slagingscriterium":"${NEW_CURSUS_SLAGINGCR}", "status":"${NEW_CURSUS_STATUS}",
...                           "maxdeelnemers":"${NEW_CURSUS_MAXDEELNMRS}","beschrijving":"${NEW_CURSUS_DESC}"}

${STUDENT_NAME1}              Avans Minorstudent
${STUDENT_ID1}                101
${STUDENT_EMAIL1}             avansminorstudent@avans.nl
${STUDENT_NAME2}              Andere Minorstudent
${STUDENT_ID2}                99
${STUDENT_EMAIL2}             anderestudent@avans.nl
${NEW_TRAINEE_JSON1}          {"email": "${STUDENT_EMAIL1}", "id": ${STUDENT_ID1}, "naam": "${STUDENT_NAME1}"}
${NEW_TRAINEE_JSON2}          {"email": "${STUDENT_EMAIL2}", "id": ${STUDENT_ID2}, "naam": "${STUDENT_NAME2}"}

*** Test Case ***

1. Controleer of de functieniveaus correct terugkomen
    GET Functieniveaus
    Response Status Should Be   200
    Log Response Body To Console

2. Creëer een nieuwe training in de applicatie
    POST New Training    ${NEW_TRAINING_JSON}
    Response Status Should Be   201
    Log Response Body To Console

3. Verifieer of de training uit stap 2 correct is opgeslagen
    GET Training    ${CREATED_TRAINING_ID}
    Response Status Should Be   200
    Log Response Body To Console

4. Test of een nieuwe deelnemer kan worden toegevoegd
    POST New Participant    ${CREATED_TRAINING_ID}   ${NEW_TRAINEE_JSON1}
    Log Response Body To Console

5. Test of er niet meer dan het maximum aantal deelnemers kunnen aanmelden en dat je de verwachte foutmelding krijgt als dat wel zo is
    :FOR    ${i}    IN RANGE    ${NEW_CURSUS_MAXDEELNMRS}
    \    Exit For Loop If    ${i} == ${NEW_CURSUS_MAXDEELNMRS}
    \    POST New Participant   ${CREATED_TRAINING_ID}   ${NEW_TRAINEE_JSON1}
    Log    Exited

6. Delete de training die je hebt aangemaakt en valideer dat hij weg is
    GET Training     ${CREATED_TRAINING_ID}
    Response Status Should Be   200
    DELETE Training  ${CREATED_TRAINING_ID}
    GET Training     ${CREATED_TRAINING_ID}
    Response Status Should Be   404
