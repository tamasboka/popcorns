import {defineRule, configure} from "vee-validate";
import * as AllRules from "@vee-validate/rules"
import en from "@vee-validate/i18n/dist/locale/en.json"
import {localize, setLocale} from "@vee-validate/i18n";

for (let [ruleName, ruleFn] of Object.entries(AllRules)) {
    if (typeof ruleFn === 'function') {
        defineRule(ruleName, ruleFn)
    }
}
const fieldMixing = {
    ...en,
    names: {
        title: 'movie title',
        release_year: 'release year',
        release_month: 'release month',
        release_day: 'release day',
        length_hours: 'hours',
        name: 'name'
    }
}

Object.assign(en, fieldMixing)

configure({
    generateMessage: localize({en})
})

setLocale('en')