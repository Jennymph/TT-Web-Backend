# Generated by Django 4.2.7 on 2023-11-28 00:41

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('auth', '0001_initial'),
    ]

    operations = [
        migrations.RenameModel(
            old_name='authData',
            new_name='credentials',
        ),
        migrations.RenameField(
            model_name='credentials',
            old_name='userID',
            new_name='user',
        ),
    ]
