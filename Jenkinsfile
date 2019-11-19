pipeline {
    agent any
    }
    stages {
         stage('Stage 1') {
            steps {
                echo 'Hello world!' 
            }
        }
        stage("Checkout Code") {
                steps {
                    echo 'checkout'
                    checkout scm
                    stash(name: 'ws', includes: "**", excludes: '**/.git/**')
                    stash(name: 'openshift', includes: '**/openshift/**')
            }
        }
    }
}