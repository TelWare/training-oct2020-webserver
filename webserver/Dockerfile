FROM python
WORKDIR /app
ADD . /app
RUN pip install -r requirements.txt
EXPOSE 80
ENV NAME Docker Pro
CMD ["python", "app.py"]
