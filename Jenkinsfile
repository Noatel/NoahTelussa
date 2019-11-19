pipeline {
    agent any
    }
    stages {
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