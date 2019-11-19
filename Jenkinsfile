pipeline {
    agent {
        docker {
            image 'php:7.3.4'
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