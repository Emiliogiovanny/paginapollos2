import React from 'react';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import Registro from './registro';

const Stack = createNativeStackNavigator();

const RegistroStack = () => {
  return (
    <Stack.Navigator>
      <Stack.Screen name="Registro" component={Registro} />
    </Stack.Navigator>
  );
}

export default RegistroStack;
