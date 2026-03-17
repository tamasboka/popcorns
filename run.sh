#!/bin/bash
cd .run
gnome-terminal --title="FRONTEND" -- ./frontend.sh
gnome-terminal --title="BACKEND" -- ./backend.sh
