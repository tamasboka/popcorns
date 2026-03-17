#!/bin/bash
cd ../basic-frontend
if [ -d "node_modules" ]; then
        npm run dev -- --host
else
        npm i
        npm run dev -- --host
fi
