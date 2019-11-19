#!groovy
def appName = ""
def project = ""
def majorVersion = "1"
def imageVersion = ""

pipeline {
    agent {
        label "maven"
    }
    options {
        skipDefaultCheckout()
        buildDiscarder logRotator(artifactDaysToKeepStr: '', artifactNumToKeepStr: '', daysToKeepStr: '', numToKeepStr: '5')
    }

    stages {
        stage("Checkout Code") {
            steps {
                echo 'checkout'
                checkoutSourceCode()
            }
        }
        stage("Build application") {
            steps {
                echo 'Building'
                buildApplication()
            }
        }
        stage("Unit test") {
            steps {
                echo 'Running Unittest'
                unitTestApplication()
            }
            post {
                always {
                    junit '**/surefire-reports/**/*.xml'
                }
            }
        }
    post {
        failure {
            echo 'Fail, loser'
        }
    }
}
