pipeline {
    agent {
        docker {
            image 'php:7.0'
            args '-u root:sudo'
        }
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