FROM ubuntu:18.04

LABEL MAINTAINER="Edward Becx <ebecx@kza.nl>"
LABEL description="avans-minor-robot"

# Python installation and essential tools for the container
RUN apt-get update && \
  apt-get -qqy --no-install-recommends install \
  python3-dev\
  python3-pip \
  gnupg \
  unzip \
  wget \
  curl \
  software-properties-common \
  libnss3-tools \
  xvfb && \
  apt-get clean && \
  # don't upgrade PIP, see: https://stackoverflow.com/questions/54326597/cant-install-numpy-after-a-pip-upgrade
  pip3 install --upgrade pip setuptools

# Firefox and Geckodriver installation
RUN apt-get install -y firefox
ENV GECKODRIVER_VERSION 0.24.0
RUN wget --no-verbose -O /tmp/geckodriver.tar.gz https://github.com/mozilla/geckodriver/releases/download/v$GECKODRIVER_VERSION/geckodriver-v$GECKODRIVER_VERSION-linux64.tar.gz \
  && rm -rf /opt/geckodriver \
  && tar -C /opt -zxf /tmp/geckodriver.tar.gz \
  && rm /tmp/geckodriver.tar.gz \
  && mv /opt/geckodriver /opt/geckodriver-$GECKODRIVER_VERSION \
  && chmod 755 /opt/geckodriver-$GECKODRIVER_VERSION \
  && ln -fs /opt/geckodriver-$GECKODRIVER_VERSION /usr/bin/geckodriver \
  && ln -fs /opt/geckodriver-$GECKODRIVER_VERSION /usr/bin/wires

# Adding the other needed files to the docker image
RUN mkdir -p /opt/robotframework/
COPY . /opt/robotframework/
ENV PATH=/opt/robotframework:$PATH

# Installing RobotFramework libraries
RUN pip install --no-cache-dir -r /opt/robotframework/requirements.txt

# Execute all robot tests
CMD ["robot", "--console", "verbose", "--outputdir", "/reports", "/suites"]
