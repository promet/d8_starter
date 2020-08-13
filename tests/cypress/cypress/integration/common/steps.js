import { Given } from "cypress-cucumber-preprocessor/steps";
import { Then } from "cypress-cucumber-preprocessor/steps";

Then(`I should see {string}`, (title) => {
  cy.title().should('include', title)
});

Given('I visit {string}', (url) => {
  cy.visit(url)
});
