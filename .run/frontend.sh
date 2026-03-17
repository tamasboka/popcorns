#!/bin/bash
cd ../basic-frontend
if [ -d "node_modules" ]; then
        npm run dev
else
        npm i
        npm run dev
fi
