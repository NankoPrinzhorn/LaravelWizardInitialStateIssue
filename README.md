Hi all,

We have just upgraded from Livewire "^v3.6" to "^v4" and also patched this Laravel Wizard package from "^v2.4" to "^3.1".

Since this upgrade we are experiencing issues with the wizard. It seems that in later steps, the state of earlier steps are getting reset to the initial state values defined in the wizard component. I was unable to create a issue, so here I am in the Q&A section

## Reproduction

Repository:

https://github.com/NankoPrinzhorn/LaravelWizardInitialStateIssue

Demo screen recording:

https://github.com/user-attachments/assets/2069b1d4-af65-45b8-a4d7-12738c3ea75f

## Scenario

In Step1, two values are defined:

- A number, coming from the URL (mocking a model ID), which is passed down to the step.
- A text input, entered within the step, which should persist across all following steps.

Both Step2 and Step3 dump the data returned from the custom state method: `$this->state()->getStep1Data()`.

## Expected behaviour

It is expected that the data entered in Step1, is persistent in all following steps.

## Actual behaviour

- Step2 shows the data correctly, with all expected information
- Step3 show an error, `Undefined array key "stepText"`

## Observation
After the error is shown to the user, if the user would click the error away and manually goes back to the first step. The whole process is working again as expected without errors. See below

https://github.com/user-attachments/assets/30eace42-6d0d-451a-a46a-6d718bbed420

