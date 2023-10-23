import React from 'react';
import { View, TextInput, TouchableOpacity, Text, StyleSheet, SafeAreaView, Image } from 'react-native';
import { useNavigation } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';

const Stack = createNativeStackNavigator();
const LoginScreen = () => {
  const navigation = useNavigation();

  const navigateToRegistro = () => {
    navigation.navigate('Registro');
  };

  return (
    <SafeAreaView style={styles.container}>
      <View style={styles.topSection}>
        <Image
          source={{
            uri: 'https://media.istockphoto.com/id/1415731858/es/foto/joven-mochilero-tomando-fotos-de-globos-aerost%C3%A1ticos-volando-en-goreme-en-capadocia-en-turqu%C3%ADa.jpg?s=612x612&w=0&k=20&c=CaJeMkEUAff4bFnr7oC-P68Yo2ekZ8gqy5pqEXZ3r80=',
          }}
          style={styles.image}
        />
        <View style={styles.overlay}>
          <Text style={styles.title}>Trevelo</Text>
        </View>
      </View>
      <View style={styles.bottomSection}>
        <TextInput
          style={styles.input}
          placeholder="Usuario"
          placeholderTextColor="#008000"
        />
        <TextInput
          style={styles.input}
          placeholder="Contraseña"
          placeholderTextColor="#008000"
          secureTextEntry
        />
        <TouchableOpacity
          style={styles.loginButton}
          onPress={navigateToRegistro}
        >
          <Text style={styles.loginButtonText}>Registrarse</Text>
        </TouchableOpacity>
        <TouchableOpacity
          style={styles.loginButton}
          onPress={() => {} /* Agrega aquí la lógica para iniciar sesión */}
        >
          <Text style={styles.loginButtonText}>Iniciar Sesión</Text>
        </TouchableOpacity>
      </View>
    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: "center",
    alignItems: "center",
    backgroundColor: "#FFFFFF",
  },
  topSection: {
    flex: 1,
    width: '100%',
  },
  image: {
    flex: 1,
    width: '100%',
    height: '100%',
    resizeMode: 'cover',
    position: 'absolute',
  },
  overlay: {
    ...StyleSheet.absoluteFillObject,
    backgroundColor: 'transparent',
    justifyContent: 'center',
    alignItems: 'center',
  },
  title: {
    fontSize: 35,
    fontWeight: "bold",
    color: "#ffffff",  
  },
  bottomSection: {
    flex: 1,
    width: '80%',
    justifyContent: 'center',
    alignItems: 'center',
  },
  input: {
    width: "100%",
    height: 50,
    borderColor: "#008000",
    borderWidth: 2,
    borderRadius: 30,
    marginBottom: 20,
    paddingLeft: 20,
    color: "#008000",
  },
  loginButton: {
    backgroundColor: "#008000",
    borderRadius: 30,
    paddingVertical: 20,
    paddingHorizontal: 40,
    alignItems: 'center',
    marginBottom: 10,  // Agrega un margen inferior
  },
  loginButtonText: {
    color: "white",
    fontSize: 20,
    fontWeight: "bold",
  },
});

export default LoginScreen;
