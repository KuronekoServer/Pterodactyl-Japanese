import React from 'react';
import { Actions, State, useStoreActions, useStoreState } from 'easy-peasy';
import { Field, Form, Formik, FormikHelpers } from 'formik';
import { object, string } from 'yup';
import SpinnerOverlay from '@/components/elements/SpinnerOverlay';
import FormikFieldWrapper from '@/components/elements/FormikFieldWrapper';
import Select from '@/components/elements/Select';
import { ApplicationStore } from '@/state';
import { httpErrorToHuman } from '@/api/http';
import tw from 'twin.macro';
import { Button } from '@/components/elements/button/index';
import { useTranslation } from 'react-i18next';

interface Values {
    language: string;
}

export default () => {
    const user = useStoreState((state: State<ApplicationStore>) => state.user.data);
    const settings = useStoreState((state: State<ApplicationStore>) => state.settings.data);
    const updateLanguage = useStoreActions((state: Actions<ApplicationStore>) => state.user.updateUserLanguage);
    const { clearFlashes, addFlash } = useStoreActions((actions: Actions<ApplicationStore>) => actions.flashes);
    const { t } = useTranslation('strings');

    if (!user || !settings) {
        return null;
    }

    const submit = (values: Values, { setSubmitting }: FormikHelpers<Values>) => {
        clearFlashes('account:language');

        updateLanguage(values)
            .then(() => window.location.reload())
            .catch((error) =>
                addFlash({
                    type: 'error',
                    key: 'account:language',
                    title: 'Error',
                    message: httpErrorToHuman(error),
                })
            )
            .then(() => setSubmitting(false));
    };

    return (
        <Formik
            onSubmit={submit}
            initialValues={{ language: user.language }}
            validationSchema={object().shape({
                language: string().required(),
            })}
        >
            {({ isSubmitting, isValid, values }) => (
                <Form css={tw`m-0`}>
                    <SpinnerOverlay size={'large'} visible={isSubmitting} />
                    <FormikFieldWrapper
                        name={'language'}
                        label={t('display_language')}
                        description={t('display_language_help')}
                    >
                        <Field as={Select} name={'language'}>
                            {Object.entries(settings.languages).map(([key, value]) => (
                                <option key={key} value={key}>
                                    {value}
                                </option>
                            ))}
                        </Field>
                    </FormikFieldWrapper>
                    <div css={tw`mt-6`}>
                        <Button disabled={isSubmitting || !isValid || values.language === user.language}>
                            {t('save')}
                        </Button>
                    </div>
                </Form>
            )}
        </Formik>
    );
};